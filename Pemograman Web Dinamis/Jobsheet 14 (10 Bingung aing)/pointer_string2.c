#include <stdio.h>

int main(){
    char hobi[] = "Programming";
    char *phobi = "Programming";

    printf("Hobi saya = %s \n" , hobi);
    printf("phobi = %s \n" , phobi);

    phobi++;
    printf("phobi = %s \n" , phobi);

    return 0 ;
}