import math    

def printArr(arr):
    print('\n'.join([''.join(['{:4}'.format(item) for item in row]) 
        for row in arr]))


arr = [
  [1,2,3], 
  [4,5,6],
  [7,8,9]
];


n = len(arr);

# Step 1 - Swapping arr[i][j] to arr[j][i]

for i in range (n):  
    for j in range (i):
        temp = arr[i][j];
        arr[i][j] = arr[j][i];
        arr[j][i] = temp;

printArr(arr)
print("\n")

# Step 2 - switch row 1 and row 3

for i in range (n):
    for j in range(n//2):
        temp = arr[i][j]
        arr[i][j] = arr[i][n-1-j]
        arr[i][n-1-j] = temp;
printArr(arr);


# Another solution from LeetCode


def rotate(self, matrix):
    n=len(matrix)
    if n%2==0:
        mid=int(n/2)
        while mid<=n-1:
            matrix[mid], matrix[n-1-mid] = matrix[n-1-mid], matrix[mid]
            mid+=1
    else:
        mid=int(n/2)+1
        while mid<=n-1:
            matrix[mid], matrix[n-1-mid] = matrix[n-1-mid], matrix[mid]
            mid+=1