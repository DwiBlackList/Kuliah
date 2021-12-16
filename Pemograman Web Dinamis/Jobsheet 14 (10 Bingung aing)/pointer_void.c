#include <stdio.h>

int main(){
    void *Alamat;
    int x = 35;
    float y = 57.6;

    Alamat = &x;
    printf("Nilai yang ditunjuk pointer : %d \n" , *(int *) Alamat);

    Alamat = &y;
    printf("Niali yang ditunjuk pointer : %f \n" , *(float *) Alamat);
}