using ClassLibForProxi;

class Program
{
    static void Main(string[] args)
    {
        ITextReader reader = new SmartTextReader();

        ITextReader checkerProxy = new SmartTextChecker(reader);
        char[][] textArray = checkerProxy.ReadText(@"C:\a_ZDTU\CPZ\kpz_sereda\Lab03\ProgramLab03\Proxi\sample.txt");

        ITextReader lockerProxy = new SmartTextReaderLocker(reader, @"restricted.*");
        char[][] restrictedTextArray = lockerProxy.ReadText(@"C:\a_ZDTU\CPZ\kpz_sereda\Lab03\ProgramLab03\Proxi\sample.txt");
    }
}
