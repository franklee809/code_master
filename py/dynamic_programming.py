
from prettytable import PrettyTable
from pprint import pprint

# t = PrettyTable(['Name', 'Age'])
# t.add_row(['Alice', 24])
# t.add_row(['Bob', 19])
# print(t)

class DynamicProgramming(object):
    def __init__(self):
        self.storage = {};
        self.setBoolean = {};

    def bottomUp(self):
        return 0;

    def assignTrueOrFalse(self,array,key=0,val=0):
        for x in array[0]:
            self.setBoolean[x] = True;
        print(self.setBoolean,"\n");
    
    def verifyClauseTrueOrFalse(self,clause):
        variable = self.setBoolean; pprint(clause); print("\n");
        result = ''; lastchar = len(clause); count = 0;
        for i in clause:
            Str = ''; count += 1;
            if type(i) == tuple:
                bitWise2 = '';
                for x in i:
                    bitWise = ''; 
                    if(type(x) is list):
                        if(bitWise == ''):
                            Str = not variable[x[1]] if x[0] == 'not' else variable[x[0]]

                        else: 
                            if(x[0] == 'not'):
                                if(bitWise == 'and'):
                                    Str &= not variable[x[1]]
                                else:
                                    Str |= not variable[x[1]]

                            else:
                                if(bitWise == 'and'):
                                    Str &= variable[x[0]]
                                else:
                                    Str |= variable[x[0]]
                        
                    else:
                        bitWise = 'and' if x == 'and' else 'or';
                    
                print('Final Output ', Str);
                if result == '': 
                    result = Str 
                else:
                    if lastchar != count:
                        if bitWise2 == 'and':
                            result &= Str; 
                        else:
                            result |= Str;
            else:
                bitWise2 = 'and' if x == 'and' else ''

        print('Result : ', result);

        self.storage[str(clause)] = True;
        # print(self.storage)
        
        

