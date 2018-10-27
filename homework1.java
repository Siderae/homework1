public class homework1{
    public static long squaresum(int a, int b){
        long a1;
        long a2=0;
        for(int i = a; i<=b; i++){
            a1=i*i;
            a2+=a1;
            //System.out.println(a1);
        }
        return a2;

    }

    public static long multiplication(int a, int b){
        long a1=1;
        for(int i=a; i<=b; i++){
            a1 *= i;
            //System.out.println(a1);
        }
        return a1;
    }

    public static void main(String[] args){
        long A = squaresum(3,9);
        long B = multiplication(2,8);
        System.out.println(A+B);
        //System.out.println(B);
    }


}
