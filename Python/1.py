import pandas as pd

# Admin + Paslon
def nambah_paslon(dict_obj, key, value):
    dict_obj[key] = value

# Pemilih nyoblos
def nyoblos(dict_obj, key, value):
    # Check if key exist in dict or not
    if key in dict_obj:
        # Key exist in dict.
        # Check if type of value of key is list or not
        if not isinstance(dict_obj[key], list):
            # If type is not list then make it list
            dict_obj[key] = [dict_obj[key]]
        # Append the value in list
        dict_obj[key].append(value)
        print("Pemilihan Berhasil")
    else:
        # As key is not in dict,
        # so, add key-value pair
        # dict_obj[key] = value
        print("Paslon Anda Tidak Terdaftar")

# Input Data Pemilih
def datapemilih(dict_obj, key, value):
    # Check if key exist in dict or not
    if key in dict_obj:
        # Key exist in dict.
        # Check if type of value of key is list or not
        if not isinstance(dict_obj[key], list):
            # If type is not list then make it list
            dict_obj[key] = [dict_obj[key]]
        # Append the value in list
        dict_obj[key].append(value)
        print("Data Berhasil Masuk")
    else:
        print("Nik Telah Terdaftar")
    
# Hitung Hasil Nyoblos
def hitung(dict_obj):
    for key, values in paslon.items():
        paslon[key] = sum(values)       
        
# Dictionary of strings and ints
paslon = {}
pemilih = {
    "NIK" : False,
    "Nama" : False
}

pilihanadmin = 1
while pilihanadmin != 0:
    print("===============================")
    print("1.Masukkan Nama Paslon")
    print("2.Pemilihan Paslon")
    print("3.Jumlah Hasil Pemilihan Paslon")
    print("4.Lihat Data Pemilih")
    print("0.Keluar Aplikasi")
    print("===============================")
    pilihanadmin = int(input("Masukkan Pilihan (1/2/3/4/0) : "))
    if pilihanadmin == 0 :
        break
    elif pilihanadmin == 1 :
        pilihannambahpaslon = 1
        while pilihannambahpaslon != 0:
            print("1.Tambah Paslon")
            print("2.Kembali (Menu Utama)")
            print("===============================")
            pilihannambahpaslon = int(input("Masukkan Pilihan (1/2) : "))
            if pilihannambahpaslon == 1:
                namapaslon = input("Masukkan Nama Paslon : ")
                value = False
                nambah_paslon(paslon , namapaslon , value)
            elif pilihannambahpaslon == 2:
                break
            else:
                print("Pilihan Salah")
    elif pilihanadmin == 2 :
        pilihannyoblos = 1
        while pilihannyoblos != 1029:
            if pilihannyoblos == 1:
                print("Daftar Paslon")
                i=1
                for key, value in paslon.items() :  
                    print (i,".",key)
                    i+=1

                nik = int(input("Masukkan NIK : "))
                nama = input("Masukkan Nama : ")
                datapemilih(pemilih, "NIK" , nik)
                datapemilih(pemilih, "Nama" , nama)

                pilihanpemilih = input("Masukkan Pilihan Paslon Anda (nama paslon sesuai yang tertera): ")
                
                jumlah = 1
                nyoblos(paslon, pilihanpemilih , jumlah)                
                print("===============================")
            elif pilihannyoblos == 1029 :
                break
            else:
                print("Pilihan Salah")
            pilihannyoblos = int(input("1 Untuk Pilih Lagi :"))
    elif pilihanadmin == 3:
        hitung(paslon)
        print(paslon)
    elif pilihanadmin == 4:
        df = pd.DataFrame(pemilih)
        print (df)
    else:
        print("Pilihan Salah")