#include <stdio.h>

int main() {
    float a , *b , *c;

    a = 16.79;
    b = &a;
    c = b;

    printf("Nilai variable a berada di alamat %p \n" , b);
    printf("Nilai variable a berada di alamat %p \n" , c);

    return 0;
}