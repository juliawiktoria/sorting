def partition(arr):
    pivot = arr[0]
    left, equal, right = [], [], []
    for elem in arr:
        if elem < pivot:
            left.append(elem)
        elif elem == pivot:
            equal.append(elem)
        else:
            right.append(elem)

    return left, equal, right

def quicksort(arr):
    if len(arr) <= 1: 
        return arr
    
    left, equal, right = partition(arr)
    merged = quicksort(left) + equal + quicksort(right)
    print(" ".join(str(x) for x in merged))
    
    return merged


if __name__ == '__main__':
    n = input()

    ar = list(map(int,input().rstrip().split()))

    quicksort(ar)