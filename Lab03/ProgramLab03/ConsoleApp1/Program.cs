using ClassLib;
using System;
using System.IO;

class Program
{
    static void Main(string[] args)
    {
        string filePath = Path.Combine(AppDomain.CurrentDomain.BaseDirectory, "log.txt");
        Logger consoleLogger = new Logger();
        FileWriter fileWriter = new FileWriter(filePath);
        ILogger logger = new MainLoggerAdapter(consoleLogger, fileWriter);

        logger.Log("Це інформаційне повідомлення");
        logger.Error("Це повідомлення про помилку");
        logger.Warn("Це попередження");

        Console.WriteLine($"Логування завершено. Перевірте файл {filePath}.");
    }
}
