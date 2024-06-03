

using System;
using System.IO;

public class FileWriter
{
    private string filePath;

    public FileWriter(string filePath)
    {
        this.filePath = filePath;
    }

    public void Write(string message)
    {
        File.AppendAllText(filePath, message);
    }

    public void WriteLine(string message)
    {
        File.AppendAllText(filePath, message + Environment.NewLine);
    }
}

