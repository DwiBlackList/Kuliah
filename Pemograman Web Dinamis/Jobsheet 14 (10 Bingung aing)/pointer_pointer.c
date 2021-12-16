#include <stdio.h>

int main(){
    int x = 47;
    int *pointer1;
    int **pointer2;

    printf("Nilai x : %d \n" , x);
    pointer1 = &x;
    pointer2 = &pointer1;

    printf("*pointer = %d \n" , *pointer1);
    printf ("**pointer2 = %d \n" , **pointer2);

    return 0;
}