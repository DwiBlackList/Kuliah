#include <stdio.h>

int main(){
    int bil = 7;
    float harga = 1200.89;
    char karakter = 'K';

    printf("Isi variable : \n");
    printf("Variable bil nilainya : %d \n" , bil);
    printf("Variable harga nilainya : %f \n" , harga);
    printf("Variable karakter nilainya : %c \n" , karakter);

    printf("Alamat variable : \n");
    printf("Variable bil alamatnya : %d \n" , &bil);
    printf("Variable harga alamatnya : %f \n" , &harga);
    printf("Variable karakter alamatnya : %c \n" , &karakter);

    return 0;
}