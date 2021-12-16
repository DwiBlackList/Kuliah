#include <stdio.h>

int main() {
    int nilai_mahasiswa[] = {80 , 87 , 95};
    int *Alamat;
    Alamat = nilai_mahasiswa;

    int i;
    for (i = 0; i < sizeof(nilai_mahasiswa) / sizeof(int); i++)
    {
        printf("Alamat : %x \n" , Alamat);
        printf("*Alamat : %d \n" , *Alamat);
        Alamat++;
    }

    return 0;
    
}