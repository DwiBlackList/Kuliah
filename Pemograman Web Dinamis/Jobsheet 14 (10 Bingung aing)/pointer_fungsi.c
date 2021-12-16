#include <stdio.h>

void ubah_nilai(int *bilangan);

int main(){
    int bilangan = 172;
    printf("Nilai bilangan semula = %d \n" , bilangan);

    ubah_nilai(&bilangan);
    printf("Nilai bilangan sekarang = %d \n" , bilangan);

    return 0;
}

void ubah_nilai(int *x){
    *x = 87;
}