#include <stdio.h>

int main(){
    float nilai;
    float *alamat;
    alamat = &nilai;

    nilai = 29.5;
    printf("Nilai %f berada pada alamat %p" , nilai , alamat);

    return 0;
}