#include <iostream>
using namespace std;
int main(){
  int n, i, j, k, l=1, setengah;
      n=5;
      setengah = n/2;        
          for(i=0;i<setengah;i++){
            for(j=setengah;j>=i;j--){
              cout << " ";
            }
            for(k=1;k<=l;k++){
              if(k==1 || k==l){
                cout << "*";
              }else{
                cout <<" ";
              }
            }
            l+=2;
            cout << endl;
          }
          for(i=0;i<n-setengah;i++){
            for(j=0;j<=i;j++){
              cout << " ";
            }
            for(j=l;j>0;j--){
              if(j==l || j==1){
                cout << "*";
              }else{
                cout << " ";
              }
            }
            l-=2;
            cout << endl;
          }
        }