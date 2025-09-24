# stack.py
# -----------------------------------------------------------------------------
# This program shows how to build a simple Stack in Python.
# A stack is like a pile of plates: you put new plates on top (push),
# and you take plates off the top (pop). You can only use the "top".
# -----------------------------------------------------------------------------

# We will use a Python list to store our stack items.
stack = []  # Right now the stack is empty.


def push(value):
    # This function puts a new value on top of the stack.
    # "append" adds the value to the end of the list, which is our "top".
    stack.append(value)


def pop():
    # This function removes and returns the value from the top of the stack.
    # But first, we must check if the stack is empty.
    if len(stack) == 0:        # If there are no items in the stack...
        return None            # ...return None, because there's nothing to remove.
    else:
        return stack.pop()     # Otherwise, remove and return the last item in the list.


def peek():
    # This function returns the top value without removing it.
    # Again, check if the stack is empty first.
    if len(stack) == 0:        # If the stack is empty...
        return None            # ...there's no "top", so return None.
    else:
        return stack[-1]       # [-1] gets the last item in the list (the "top").


def is_empty():
    # This function tells us whether the stack has no items.
    # If the length is 0, the stack is empty.
    return len(stack) == 0     # Will return True if empty, False if not.


def size():
    # This function tells us how many items are currently in the stack.
    return len(stack)          # The length of the list is the stack's size.