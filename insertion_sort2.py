import math
import os
import random
import re
import sys

#
# Complete the 'insertionSort2' function below.
#
# The function accepts following parameters:
#  1. INTEGER n
#  2. INTEGER_ARRAY arr
#

def insertionSort2(n, arr):
    # one or less elements are automatically sorted
    if n <= 1: 
        print(" ".join(str(x) for x in arr))
        return
    
    # looping through all positions that need to be tested
    for i in range(1, n):
        # print("Testing val {} at ind {} against lower indices.".format(arr[i],i))
        current = arr[i]
        for j in range (i - 1, -1, -1):
            if arr[j] < current:
                # print(" ".join(str(x) for x in arr))
                break
            else:
                arr[j + 1] = arr[j]
                arr[j] = current
        print(" ".join(str(x) for x in arr))
                

if __name__ == '__main__':
    n = int(input("Input the number of elements: ").strip())

    arr = list(map(int, input("Input whitespace-separated elements: ").rstrip().split()))

    insertionSort2(n, arr)
