using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibForProxi
{
    public class SmartTextChecker : ITextReader
    {
        private ITextReader textReader;

        public SmartTextChecker(ITextReader textReader)
        {
            this.textReader = textReader;
        }

        public char[][] ReadText(string filePath)
        {
            Console.WriteLine($"Відкриття файлу: {filePath}");
            char[][] textArray = textReader.ReadText(filePath);
            Console.WriteLine($"Чудово прочитано: {filePath}");
            Console.WriteLine($"Кількісь рядків: {textArray.Length}");

            int totalChars = 0;
            foreach (char[] line in textArray)
            {
                totalChars += line.Length;
            }
            Console.WriteLine($"кількість символів: {totalChars}");

            Console.WriteLine($"Закриття файлу: {filePath}");

            return textArray;
        }
    }
}