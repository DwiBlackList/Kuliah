#include <stdio.h>

void kali_bil(int bil){
    bil = bil * 12;
    printf("Bilangan diubah ke %d \n", bil);
}

void main(){
    int bil = 2 ;

    printf("Bilangan sebelum diubah : %d \n" , bil);
    kali_bil(bil);
    printf("Bilangan setelah diubah : %d \n" , bil);
}