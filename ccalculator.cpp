#include<iostream>
#include<bits/stdc++.h>
#include<cmath>
using namespace std;
int main()
{
    char ch,c;
    int n,number,i,sum=0,diff= 0,mult =1,d,divi,r,power,srt,crt;
    string name;
    cout<<"please enter your name"<<endl;
    cin>>name;
    cout<<"Hello Mr. "<<name<<" WELCOME TO MY CALCULATOR"<<endl;
    cout<<"Please choose any one option that you want to perform"<<endl;
    cout<<"for performing addition press        + symbol"<<endl;
    cout<<"for performing Difference press      - symbol"<<endl;
    cout<<"for performing Multiplication press  x symbol"<<endl;
    cout<<"for performing division press        / symbol"<<endl;
    cout<<"for performing square root press     S symbol"<<endl;
    cout<<"for performing cube root press       Q symbol"<<endl;
    cout<<"for performing trignometric press    T symbol"<<endl;
    //cout<<"for performing addition press + symbol"<<endl;
    cin>>ch;
    
    switch(ch)
    {
       l0: case '+': 
                cout<<"Enter how many numbers do you want to add :"<<" ";
                cin>>n;
                for(i = 1;i<=n ; i++)
                {   
                    cin >> number;
                    sum = sum + number;
                }
                cout<<"The sum is :"<<sum<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                    {goto l0;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
       l1: case '-': 
                cout<<"Enter how many numbers do you want to subtaract :"<<" ";
                cin>>n;
                for(i = 1;i<=n ; i++)
                {   
                    cin >> number;
                   int  diff = 0;
                   diff = number - diff;
                }
                cout<<"The Difference is: "<<diff<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l1;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
         l2: case 'x': 
                cout<<"Enter how many numbers do you want to multiply :"<<" ";
                cin>>n;
                for(i = 1;i<=n ; i++)
                {   
                   cin >> number;
                   mult = number*mult;
                }
                cout<<"The Multiplication of "<<n<<"numbers is: "<<mult<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l2;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
         l3: case '/': 
                cout<<"Enter the divisor and divident :"<<" ";
                cin>>d>>n;

                   divi = n/d;
                  if(n<d)
                  {
                      r = n;
                  }
                  if(n<0){
                       r = n+d;
                  }
                  else
                       r = n%d;
                
                cout<<"The quotient is : "<<divi<<endl;
                cout<<"The Remainder is: "<<r<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l3;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
         l4: case '^': 
                cout<<"Enter the base and the power :"<<" ";
                cin>>d>>n;
              
                       power = pow(d,n);
                
                cout<<d<<" to the power "<< n <<" is: "<< power<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l4;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
        l6: case 'S': 
                cout<<"Enter the number for finding square root :"<<" ";
                cin>>n;
              
                       srt = sqrt(n);
                
                cout<<"The square root of "<<n<< " is: "<< srt<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l6;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
        l5: case 'Q': 
                cout<<"Enter the number for finding cube root :"<<endl;
                cin>>n;
              
                       crt = cbrt(n);
                
                cout<<"The square root of "<<n<< " is: "<< crt<<endl;
                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l5;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
        l7: case 'T': 
                cout<<"Enter the degree for finding trignometric function value :"<<" ";
                cin>>n;
                cout<<"which function do you want to apply on "<< n <<endl;
                cout<<"to apply sin press   s "<<endl;
                cout<<"to apply cos press   c "<<endl;
                cout<<"to apply tan press   t "<<endl;
                cout<<"to apply sec press   p "<<endl;
                cout<<"to apply cot press   q "<<endl;
                cout<<"to apply cosec press t "<<endl;
                cin >> c;
                    if(c == 's')
                        cout<<"sin value of "<< n << " is: " << sin(n)<<endl;
                    else if(c == 'c')
                        cout<<"cos value of "<< n << " is: " << cos(n)<<endl;
                    else if(c == 't')
                        cout<<"tan value of "<< n << " is: " << tan(n)<<endl;
                    else if(c == 'p')
                        cout<<"sec value of "<< n << " is: " << 1/tan(n)<<endl;
                    else if(c == 'q')
                        cout<<"cot value of "<< n << " is: " << 1/cos(n)<<endl;
                    else if(c == 't')
                        cout<<"sin value of "<< n << " is: " << 1/sin(n)<<endl;
                    else
                        cout<<"Sorry I can't find the solution "<<endl;

                cout<<"do you want to continue(y/n): "<<" ";
                cin>>c;
                if(c == 'y')
                   { goto l7;}
                else if(c == 'n')
                {
                    cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
                    break;
                }
                  
         default:
                        cout<<"Thank you Mr. "<<name <<" for visiting me" << endl;
    }
}
