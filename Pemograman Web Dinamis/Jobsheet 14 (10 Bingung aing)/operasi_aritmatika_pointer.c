#include <stdio.h>

int main() {
    int x , z , w , *Penunjuk ;
    x = 14;
    z = 721;
    w = 125;
    Penunjuk = &x;

    printf("Nilai %d berada di alamat memori %p \n" , *Penunjuk , Penunjuk);
    printf("Nilai %d berada di alamat memori %p \n" , z , Penunjuk+2);
    printf("Nilai %d berada di alamat memori %p \n" ,*(Penunjuk+2) , Penunjuk+2);

    return 0;
}