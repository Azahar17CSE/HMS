#include<bits/stdc++.h>
using namespace std;
int main()
{
    int n,t1=0,t2=1,res,cont=0;
    cin>>n;
    for(int i=0;i<n;i++){

      if(i<=1){
        res=i;
      }
      else{
        res=t1+t2;
        t1=t2;
        t2=res;     
      }
      

    }
   
    return 0;
}
