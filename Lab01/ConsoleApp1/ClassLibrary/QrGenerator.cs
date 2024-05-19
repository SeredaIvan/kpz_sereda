using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DiyaClassLib
{
    static class QrGenerator
    {
        static private string url= "https://newdiya/adddocument/";
        static public QrCode generateQrCode( string type, Guid id)
        {
            return new QrCode(url, type, id);
        }
    }
}