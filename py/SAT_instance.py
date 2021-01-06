#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sat Feb  8 13:59:43 2020

@author: franklee
"""
import random

class SATInstance(object):
    def __init__(self):
        self.allVariables = [];
        self.variablesInClause = [];
        self.variableTable = [];
        self.clauses = [];
        self.totalOutput = 10;
        self.yesOrNo = ['','not'];
        self.andOr = ['and', 'or'];
        self.Index = 0;
    
    def setVariable(self,String):
        self.allVariables = list(dict.fromkeys(String.split()));
        print(self.allVariables);

    def generateClauses(self,index):
        Arr = []; Arr3 = [];

        for i in range(3):
            Arr2 = [];
            Choice = random.choice(self.yesOrNo);
            Val = random.choice(self.allVariables)
            Arr3.append(Val);

            Arr2.append(Choice) if Choice != '' else 0;
            Arr2.append(Val);

            Arr.append(Arr2);
            Arr.append(random.choice(self.andOr)) if i != 2 else 0;

        self.saveAllVariables(Arr3,index)
        return tuple(filter(self.filterCondition,Arr));
    
    def filterCondition(self,x):
        return False if x == '' else True;

    def generateOutput(self):
        Arr = [];
        for i in range(self.totalOutput):
            Arr2 = []; 
            randomNum = random.randrange(3,4);
            for n in range(randomNum):
                Arr2.append(self.generateClauses(i));
                if n != randomNum - 1:
                    Arr2.append(random.choice(self.andOr))
                
            Arr.append(Arr2);
        self.variableTable = Arr;
        return Arr;
    
    def saveAllVariables(self,val,index):
        Save = self.variablesInClause;
        if self.Index == index:
            Save.insert(index,val);
        else:
            Save[index].extend(val);
            Save[index] = list(dict.fromkeys(Save[index]))

        self.Index = index+1;
        
    def __str__(self):
        return str(self.__class__) + ": " + str(self.__dict__);

    
