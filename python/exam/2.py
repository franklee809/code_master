arr = []

def get_odds():
    for i in range(9,28):
        if(i % 2 != 0):
            arr.append(i)


get_odds()
print(arr)

for i in arr:
    if(i % 3 == 0):
        print(i)