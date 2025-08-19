# tests/test_hello.py
from hello import is_even

def test_is_even_true():
    assert is_even(4)

def test_is_even_false():
    assert not is_even(3)

def test_is_even_zero():
    assert is_even(0)

def test_is_even_negative():
    assert is_even(-2)