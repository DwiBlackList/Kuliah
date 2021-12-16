#include <stdio.h>

int main() {
    int nilai_mahasiswa[] = {80 , 87 , 95};
    int *Alamat;

    Alamat = nilai_mahasiswa;
    printf("Niali yang ditunjuk Alamat : %d \n" , *Alamat);

    printf("Nilai Mahasiswa Pertama : nilai_mahasiswa[0] : %d \n" , nilai_mahasiswa[0]);

    return 0 ;
}