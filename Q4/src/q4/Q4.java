package q4;

import java.util.Arrays;
import java.util.HashMap;
import java.util.Map;

class ChrInfo implements Comparable<ChrInfo> {

    char c;

    int count;

    double ratio;

    public ChrInfo(char c, int count, double ratio) {
        this.c = c;
        this.count = count;
        this.ratio = ratio;
    }

    @Override
    public int compareTo(ChrInfo o) {

        return Integer.compare(o.count, count);
    }
}


public class Q4 {

    static String s = "PBFPVYFBQXZTYFPBFEQJHDXXQVAPTPQJKTOYQWIPBVWLXTOXBTFXQWAXBVCXQWAXFQJVWLEQNTOZQGGQLFXQWAKVWLXQWAEBIPBFXFQVXGTVJVWLBTPQWAEBFPBFHCVLXBQUFEVWLXGDPEQVPQGVPPBFTIXPFHXZHVFAGFOTHFEFBQUFTDHZBQPOTHXTYFTODXQHFTDPTOGHFQPBQWAQJJTODXQHFOQPWTBDHHIXQVAPBFZQHCFWPFHPBFIPBQWKFABVYYDZBOTHPBQPQJTQOTOGHFQAPBFEQJHDXXQVAVXEBQPEFZBVFOJIWFFACFCCFHQWAUVWFLQHGFXVAFXQHFUFHILTTAVWAFFAWTEVOITDHFHFQAITIXPFHXAFQHEFZQWGFLVWPTOFFA";

    public static void main(String[] args) {


        int count[] = new int[26];

        for (int i = 0; i < s.length(); i++) {

            count[s.charAt(i) - 'A']++;
        }

        double[] ratio = new double[26];

        for (int i = 0; i < count.length; i++) {

            ratio[i] = count[i] * 1.0 / s.length();
        }

        ChrInfo chrInfo[] = new ChrInfo[26];

        for (int i = 0; i < 26; i++) {

            char c = (char) (i + 'A');

            chrInfo[i] = new ChrInfo(c, count[i], ratio[i]);
        }

        Arrays.sort(chrInfo);

        for (ChrInfo c : chrInfo) {

            System.out.printf("%c count:%3d ratio:%.3f\n", c.c, c.count, c.ratio);
        }

    }
}
