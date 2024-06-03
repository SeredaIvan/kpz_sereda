using ClassLibForComposite;
using System;

class Program
{
    static void Main(string[] args)
    {
        var page = new LightElementNode("html", DisplayType.Block, ClosingType.DoubleTag);

        var head = new LightElementNode("head", DisplayType.Block, ClosingType.DoubleTag);
        head.AddChild(new LightTextNode("<!-- This is a comment -->"));
        var title = new LightElementNode("title", DisplayType.Inline, ClosingType.DoubleTag);
        title.AddChild(new LightTextNode("LightHTML Page"));
        head.AddChild(title);
        page.AddChild(head);

        var body = new LightElementNode("body", DisplayType.Block, ClosingType.DoubleTag);
        var ul = new LightElementNode("ul", DisplayType.Block, ClosingType.DoubleTag);

        var li1 = new LightElementNode("li", DisplayType.Block, ClosingType.DoubleTag);
        li1.AddChild(new LightTextNode("Item 1"));
        ul.AddChild(li1);

        var li2 = new LightElementNode("li", DisplayType.Block, ClosingType.DoubleTag);
        li2.AddChild(new LightTextNode("Item 2"));
        ul.AddChild(li2);

        var li3 = new LightElementNode("li", DisplayType.Block, ClosingType.DoubleTag);
        li3.AddChild(new LightTextNode("Item 3"));
        ul.AddChild(li3);

        body.AddChild(ul);
        page.AddChild(body);

        page.Display();

        string inputText = @"
        ACT I
        SCENE I. A public place.
        Enter Sampson and Gregory armed with swords and bucklers.
        SAMPSON.
        Gregory, on my word, we’ll not carry coals.
        GREGORY.
        No, for then we should be colliers.
        SAMPSON.
        I mean, if we be in choler, we’ll draw.
        GREGORY.
        Ay, while you live, draw your neck out o’ the collar.";

        char[] separators = new char[] { '\r', '\n' };
        string[] lines = inputText.Split(separators, StringSplitOptions.RemoveEmptyEntries);

        page = new LightElementNode("html", DisplayType.Block, ClosingType.DoubleTag);
        var h1 = new LightElementNode("h1", DisplayType.Block, ClosingType.DoubleTag);
        h1.AddChild(new LightTextNode(lines[0].Trim()));
        page.AddChild(h1);

        for (int i = 1; i < lines.Length; i++)
        {
            string line = lines[i].Trim();
            if (string.IsNullOrWhiteSpace(line))
            {
                continue; 
            }
            else if (line.Length < 20)
            {
                var h2 = new LightElementNode("h2", DisplayType.Block, ClosingType.DoubleTag);
                h2.AddChild(new LightTextNode(line));
                page.AddChild(h2);
            }
            else
            {
                var p = new LightElementNode("p", DisplayType.Block, ClosingType.DoubleTag);
                p.AddChild(new LightTextNode(line));
                page.AddChild(p);
            }
        }

        page.Display();

        int treeSize = page.GetTreeSize();
        Console.WriteLine($"Розмір всього дерева: {treeSize}");
    }
}
