#include <bits/stdc++.h>
using namespace std;

int main() {
  int a,b,c,d;
  cin>>a>>b>>c>>d;
  if(a<c){
    cout<<"Takahashi"<<endl;
  }
  else if(a==c && b<d+1){
    cout<<"Takahashi"<<endl;
  }
  else{
    cout<<"Aoki"<<endl;
  }
  return 0;
}