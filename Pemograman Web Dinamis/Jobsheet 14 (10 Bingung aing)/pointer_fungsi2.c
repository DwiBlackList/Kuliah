#include <stdio.h>

char *nama_bulan(int n);

int main(){
    int kode_bulan;
    printf("Bulan (1...12) : ");
    scanf("%d" , &kode_bulan);

    printf("%s \n" , nama_bulan(kode_bulan));

    return 0 ;
}

char *nama_bulan(int n){
    static char bulan[13] [17] = {
        "Kode bulan salah" , "Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "November" , "Desember"
    };

    return ((n < 1 || n > 12) ? bulan[0] : bulan[n]);
}