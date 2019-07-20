using System;
//using System.Collections.Generic;
//using System.Linq;
//using System.Text;
					
public class Program
{
	public static void Main(string[] args)
	{
		Console.WriteLine("ARKAFOOD");
		double jumlah;
		double kilometer, pajak;
		string voucher1 = "belum";
		string pakaivoucher, pakaipajak;
		double nilaivoucher = 0;
		double kilometersisa = 0;
		double konvertkilometer = 0;
		double total;
		double totalakhir = 0;
		
            Console.Write("masukkan jumlah yang harus dibayar :");
              jumlah = double.Parse(Console.ReadLine());
		Console.Write("Anda Pakai Voucher (true atau false)?");
		pakaivoucher = Console.ReadLine();
		if(pakaivoucher == "true")
		{
			
			Console.Write("Masukkan Kode Voucher :");
			string kodevoucher = Console.ReadLine();
			voucher1 = kodevoucher;
		}
	
		else if(pakaivoucher == "false")
		{
			voucher1 = "none";
		}
		Console.Write("Masukkan Jumlah kilometer pengiriman :");
		kilometer = double.Parse(Console.ReadLine());
		Console.Write("Pakai pajak (true atau false):");
		pakaipajak = Console.ReadLine();
		if(pakaipajak == "true")
		{
			pajak = jumlah*0.05;
		}
		else
		{
			pajak = 0;
		}
		if(voucher1 == "ARKAFOOD5")
		{
			if(jumlah>=50000)
			{
				if(jumlah>100000)
				{
					nilaivoucher = 50000;
				}
				else
				{
					nilaivoucher = jumlah*0.5;
				}
			}
			else
			{
				nilaivoucher = 0;
			}
			
		}
		else if(voucher1 == "DITRAKTIRDEMY")
		{
			if(jumlah>=25000)
			{
				if(jumlah>50000)
				{
					nilaivoucher = 30000;
				}
				else
				{
					nilaivoucher = jumlah*0.6;
				}
			}
			else
			{
				nilaivoucher = 0;
			}
		}
		if(kilometer > 1.5)
		{
			kilometersisa = kilometer - 1.5;
			konvertkilometer = 5000+(kilometersisa*3000);
			
		}
		else
		{
			konvertkilometer = 5000;
		}
		
		total = ((jumlah+konvertkilometer)-nilaivoucher);
		totalakhir = total + pajak;
		Console.WriteLine("total semua =" + totalakhir);	
		Console.WriteLine("data kamu =" + jumlah + kilometer + pajak + voucher1);		
           
            
	}
}
