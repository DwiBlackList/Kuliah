#include <stdio.h>

int main(){
    void *Alamat;
    int x = 37;
    printf("Niali x semual : %d \n" , x);

    Alamat = &x;
    *(int *) Alamat = 85;
    printf("Nilai x semual : %d \n" , x);

    return 0;
}