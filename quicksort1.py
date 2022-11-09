import math
import os
import random
import re
import sys

#
# Complete the 'quickSort' function below.
#
# The function is expected to return an INTEGER_ARRAY.
# The function accepts INTEGER_ARRAY arr as parameter.
#

def quickSort(arr):
    # Write your code here
    pivot = arr[0]
    left, equal, right = [], [], []
    
    # dividing elements into correct partitions
    for elem in arr:
        if elem < pivot:
            left.append(elem)
        elif elem == pivot:
            equal.append(elem)
        else:
            right.append(elem)
    
    return left + equal + right

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input("Input the number of elements: ").strip())

    arr = list(map(int, input("Input whitespace-separated elements: ").rstrip().split()))

    result = quickSort(arr)

    fptr.write(' '.join(map(str, result)))
    fptr.write('\n')

    fptr.close()
