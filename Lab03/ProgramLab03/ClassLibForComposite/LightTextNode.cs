namespace ClassLibForComposite
{
    public class LightTextNode : LightNode
    {
        private string text;

        public LightTextNode(string text)
        {
            this.text = text;
        }

        public override void Display()
        {
            Console.Write(text);
        }
    }
}
