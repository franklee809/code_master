# Single Linked List

class Node:
    def __init__(self,value):
        self.info = value;
        self.link = None;

class SingleLinkedList:
    def __init__(self):
        self.start = None; 

    def display_list(self):
        if(self.start = None):
            print("List is empty")
            return
        else:
            p = self.start
            while p is not None:
                print(p.info ," ", end='')
                p = p.link
            print()