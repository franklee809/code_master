import requests
from bs4 import BeautifulSoup


def crawl_form(url):
    response = requests.get(url)
    if response.status_code != 200:
        print(f"Failed to retrieve the webpage. Status code: {response.status_code}")
        return

    soup = BeautifulSoup(response.text, 'html.parser')

    # Find all table cells that contain the questions
    question_cells = soup.find_all('td', style="height: 50px;")

    if not question_cells:
        print("No matching questions found on the webpage.")
        return

    print("Questions found. Extracting details...")

    for idx, cell in enumerate(question_cells, start=1):
        # Extract question text (excluding the HTML tags)
        question_text = cell.contents[0].strip()

        # Extract hidden input value
        hidden_input = cell.find('input', {'type': 'hidden'})
        hidden_value = hidden_input.get('value', '') if hidden_input else 'N/A'

        # Extract radio options and labels
        radio_inputs = cell.find_all('input', {'type': 'radio'})
        options = []
        for radio in radio_inputs:
            label = radio.find_next('font').text.strip()
            options.append((radio.get('value'), label))

        print(f"{idx}. Question: {question_text}")
        print(f"   Hidden Input Value: {hidden_value}")
        for opt_idx, (value, label) in enumerate(options, start=1):
            print(f"   Option {opt_idx}: Value: {value}, Label: {label}")

# Replace 'your_url_here' with the URL of the webpage you want to crawl
crawl_form('https://phptest.appnode.dev/test.php')
