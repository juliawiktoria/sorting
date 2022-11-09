import math
import os
import random
import re
import sys


def countSwaps(a):
    # Write your code here
    numSwaps = 0 
    firstElement, lastElement = None, None
    
    # sorting
    for i in range(0, len(a)):
        for j in range(0, len(a) - 1):
            if a[j] > a[j + 1]:
                numSwaps += 1
                a[j], a[j + 1] = a[j + 1], a[j]
    
    
    firstElement, lastElement = a[0], a[-1]
    print('Array is sorted in {} swaps.\nFirst Element: {}\nLast Element: {}'.format(numSwaps, firstElement, lastElement))
    

if __name__ == '__main__':
    n = int(input("Input the number of elements: ").strip())

    a = list(map(int, input("Input whitespace-separated elements: ").rstrip().split()))

    countSwaps(a)
