import math
import os
import random
import re
import sys

#
# Complete the 'insertionSort1' function below.
#
# The function accepts following parameters:
#  1. INTEGER n
#  2. INTEGER_ARRAY arr
#

def insertionSort1(n, arr):
    # Write your code here
    current = arr[-1]
    inserted = False
    # print("Current: {}".format(current))
    for i in range(n - 2, -1, -1):
        if arr[i] < current:
            arr[i + 1] = current
            inserted = True
            print(" ".join(str(elem) for elem in arr))            
            break
        else:
            arr[i + 1] = arr[i]
            print(" ".join(str(elem) for elem in arr))
    if inserted is False:
        arr[0] = current
        print(" ".join(str(elem) for elem in arr))
    
    
if __name__ == '__main__':
    n = int(input("Input the number of elements: ").strip())

    arr = list(map(int, input("Input whitespace-separated elements: ").rstrip().split()))

    insertionSort1(n, arr)
