'''This code sorts a list of numbers in ascending order using a simple sorting algorithm (similar to selection sort),
then calculates and prints the average, minimum, and maximum values from the sorted list.  '''

# Predefined list of numbers to be sorted
customList=[7,24,8,15,3,45,49]
total=0
for i in range(len(customList)): # Iterate through each element in the list
    for j in range(i+1, len(customList)): # Compare with subsequent elements
        if customList[i] > customList[j]:
            # Swap the elements
            temp = customList[i] # Temporary (temp) variable to hold the value
            customList[i] = customList[j]
            customList[j] = temp
    total = total + customList[i]

print("Sorted List - ", customList)
print("Average of numbers in the list - ", total/len(customList))
print("Minimum number is - ",customList[0])
print("Maximun number is - ", customList[-1])