def getCustomerQueueNumber():
    global customerQueueNumber
    customerQueueNumber = int(input('Enter Customer Queuing Number: '))


def getCustomerName():
    global customerName
    customerName = str(input('Enter Customer Name: '))

def isStudent():
    global isMember

    while True:
        check = str(input('HELP Uni Student (Yes or No): ')).lower()

        if check == 'yes':
            isMember = True
            return False

        if check == 'no':
            return False


def createOrder():
    drink = False
    size = False
    quantity = 0

    while not drink:
        drink = str(input(
            ' Select a drink (j - Java Chocolate Chip, c - Capuccino Plus Plus, p – PERL Grey Tea): ')).lower()[0]

        if(drink not in ['j', 'c', 'p']):
            drink = False

    while not size:
        size = str(
            input('Select a size (s - short, t - tall, g - grande): ')).lower()[0]
        if(size not in ['s', 't', 'g']):
            size = False

    while not quantity:
        quantity = int(input('Quantity: '))
        if(not isinstance(quantity, int) and quantity > 0):
            quantity = False

    global coffeePrice, totalPrice
    totalPrice += round(coffeePrice[drink][size] * quantity, 2)
    # print(totalPrice)


def anotherOrder():
    while True:
        check = str(input('  Is there any other item (Yes/No)? ')).lower()

        if check == 'yes':
            createOrder()

        if check == 'no':
            return False


def displaySummary():
    global isMember, totalPrice

    print('\n')
    print('Thank you very much for purchasing!')
    print('Total Price: ', totalPrice)
    print('Total Price after 50% discount (for HELP University Student): ',
          round(totalPrice/2, 2))


if __name__ == "__main__":
    customerQueueNumber = 0
    customerName = ''
    isMember = False

    totalPrice = 0
    coffeePrice = {
        'j': {
            's': 13.95,
            't': 16.95,
            'g': 18.00,
        },
        'c': {
            's': 12.70,
            't': 13.80,
            'g': 14.80,
        },
        'p': {
            's': 10.25,
            't': 13.25,
            'g': 14.30,
        }
    }

    while True:
        getCustomerQueueNumber()
        getCustomerName()
        isStudent()

        createOrder()
        anotherOrder()

        displaySummary()
        break
