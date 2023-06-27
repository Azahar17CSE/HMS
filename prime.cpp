#include<bits/stdc++.h>
using namespace std;
int main(){
  int n,i,check;
  cin>>n;
  check=0;
  for(i=2;i<=n/2;i++){

   if(n%i==0){
    check=1;
    break;
   }
    
  }
  if(check==1){
    cout<<"No"<<endl;

  }
  else{
    cout<<"Yes"<<endl;
  }
  return 0;
  }