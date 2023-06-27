#include<bits/stdc++.h>
using namespace std;
int main(){
  char name[100];
  cin>>name;
  int i=0, j=strlen(name)-1;
  bool x=true;
  for(i=0; i<j; i++){
    if(name[i]!=name[j]){
      x=false;
    }
    j--;
  }
  if(x){
    cout<<"Yes"<<endl;
  }
  else{
    cout<<"No"<<endl;
  }
   return 0;
  }