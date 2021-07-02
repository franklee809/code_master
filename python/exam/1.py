d = 2
a = 5
arr = []

for i in range(1,89):
    if(len(arr) == 0):
        arr.append(5 + (i - 1) * d)
    else:
	    arr.append(arr[i-2]+ (i - 1) * d)


# print(arr)

sum = 0
for i in arr:
	sum += i

print(sum)