#include <stdio.h>

int main(){
    char *nama_hari[7] = {
        "Senin " , "Selasa" , "Rabu" , "Kamis" , "Jumat" , "Sabtu" , "Minggu"
    };

    int i;
    for (i = 0; i < 7; i++)
    {
        printf("%s \n" , nama_hari[i]);
    }

    return 0 ;
    
}