﻿using System;
using System.Collections.Generic;
using System.Text;

namespace ClassLibForComposite
{
    public class LightElementNode : LightNode
    {
        public string TagName { get; private set; }
        public DisplayType DisplayType { get; private set; }
        public ClosingType ClosingType { get; private set; }
        public List<string> CssClasses { get; private set; }
        public List<LightNode> ChildNodes { get; private set; }

        public LightElementNode(string tagName, DisplayType displayType, ClosingType closingType)
        {
            TagName = tagName;
            DisplayType = displayType;
            ClosingType = closingType;
            CssClasses = new List<string>();
            ChildNodes = new List<LightNode>();
        }

        public void AddClass(string cssClass)
        {
            CssClasses.Add(cssClass);
        }

        public override void AddChild(LightNode childNode)
        {
            ChildNodes.Add(childNode);
        }

        public override void Display()
        {
            StringBuilder builder = new StringBuilder();
            builder.Append($"<{TagName}");

            if (CssClasses.Count > 0)
            {
                builder.Append(" class=\"");
                builder.Append(string.Join(" ", CssClasses));
                builder.Append("\"");
            }

            builder.Append(">");

            if (DisplayType == DisplayType.Block)
                builder.Append(Environment.NewLine);

            Console.Write(builder.ToString());

            foreach (var childNode in ChildNodes)
            {
                childNode.Display();
            }

            if (ClosingType == ClosingType.DoubleTag)
            {
                if (DisplayType == DisplayType.Block)
                    Console.Write(Environment.NewLine);
                Console.Write($"</{TagName}>");
            }
            else
            {
                Console.Write(" />");
            }

            if (DisplayType == DisplayType.Block)
                Console.Write(Environment.NewLine);
        }

        public override int GetTreeSize()
        {
            int size = 1;
            foreach (var child in ChildNodes)
            {
                size += child.GetTreeSize();
            }
            return size;
        }
    }
}
