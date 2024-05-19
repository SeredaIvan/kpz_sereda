using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DiyaClassLib
{
    public struct QrCode
    {
        //qr генерація є доволі об'ємною та не потрібною для консолі роботою!
        //Вирішив що це буде просто ссилкою 
        private string qr;
        public string QR { get { return qr; }  }

        public QrCode(string url, string type, Guid id)
        {
            qr = url + type +"/"+ id.ToString();
        }
    }
}