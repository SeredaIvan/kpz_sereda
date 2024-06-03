using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForProxi
{
    public class SmartTextReader : ITextReader
    {
        public char[][] ReadText(string filePath)
        {
            string[] lines = File.ReadAllLines(filePath);
            char[][] textArray = new char[lines.Length][];

            for (int i = 0; i < lines.Length; i++)
            {
                textArray[i] = lines[i].ToCharArray();
            }

            return textArray;
        }
    }
}
