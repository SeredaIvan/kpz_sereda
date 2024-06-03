using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;

namespace ClassLibForProxi
{
    public class SmartTextReaderLocker : ITextReader
    {
        private ITextReader textReader;
        private Regex filePattern;

        public SmartTextReaderLocker(ITextReader textReader, string pattern)
        {
            this.textReader = textReader;
            this.filePattern = new Regex(pattern);
        }

        public char[][] ReadText(string filePath)
        {
            if (!filePattern.IsMatch(filePath))
            {
                Console.WriteLine("Доступ заборонено !");
                return new char[0][];
            }
            else
            {
                return textReader.ReadText(filePath);
            }
        }
    }
}
