using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLib
{
    public class FileLoggerAdapter : Logger
    {
        private FileWriter fileWriter;

        public FileLoggerAdapter(FileWriter fileWriter)
        {
            this.fileWriter = fileWriter;
        }

        public void LogToFile(string message)
        {
            fileWriter.WriteLine("[LOG] " + message);
        }

        public void ErrorToFile(string message)
        {
            fileWriter.WriteLine("[ERROR] " + message);
        }

        public void WarnToFile(string message)
        {
            fileWriter.WriteLine("[WARN] " + message);
        }
    }


}
