#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sat Feb  8 14:12:02 2020

@author: franklee
"""

from SAT_instance import SATInstance;
from pprint import pprint
from dynamic_programming import DynamicProgramming;

s = SATInstance();
dp = DynamicProgramming();

s.totalOutput = 20;
s.setVariable('A B C D E F G H I');
print('\n')

s.generateOutput();
pprint(s.variableTable);
print('\n')

array = s.variableTable[0];
dp.assignTrueOrFalse(s.variablesInClause);

dp.verifyClauseTrueOrFalse(array);
