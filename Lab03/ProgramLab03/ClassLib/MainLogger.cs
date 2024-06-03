using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLib
{
    

    public class MainLoggerAdapter : ILogger
    {
        private Logger consoleLogger;
        private FileWriter fileWriter;

        public MainLoggerAdapter(Logger consoleLogger, FileWriter fileWriter)
        {
            this.consoleLogger = consoleLogger;
            this.fileWriter = fileWriter;
        }

        public void Log(string message)
        {
            consoleLogger.Log(message);
            fileWriter.WriteLine("[LOG] " + message);
        }

        public void Error(string message)
        {
            consoleLogger.Error(message);
            fileWriter.WriteLine("[ERROR] " + message);
        }

        public void Warn(string message)
        {
            consoleLogger.Warn(message);
            fileWriter.WriteLine("[WARN] " + message);
        }
    }

}
