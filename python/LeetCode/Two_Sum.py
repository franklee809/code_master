# url = https://leetcode.com/problems/two-sum/

def twoSum(nums: list, target: int):
    obj = {}; 
    for i, val in enumerate(nums):
        complement = target - val;
        if(complement in obj.keys()):
            return [obj[complement],i];
        obj[val] = i 

print(twoSum([2,7,11,15],9));