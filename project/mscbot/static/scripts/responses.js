function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello" || input == "hii" || input == "Hello" || input == "Hey" || input == "hey") {
        return "Hello there!";
    } else if (input == "Bye" || input == "bye" || input == "See you later") {
        return "See you later! Take care!!";
    }else if (input == "Will My Baby's Head Always Be the Same Shape That It is Right Now?") {
        return "Breathe—the cone-head thing is totally temporary. A quick anatomy lesson: Our skulls are put together in pieces, says David L. Hill, M.D., a Parents advisor and author of Dad to Dad: Parenting Like a Pro. Those pieces slide over each other so the baby is able to get out of the birth canal. This is called molding and can cause many funny head shapes, all of which are normal. Your baby's head will round out in about a week or two. (Incidentally, cesarean babies generally have a rounder head at birth because it doesn't get squeezed on the way out.)";
    }
    else if (input == "Should I Stress That My Baby Didn't Get a 10 Out of 10 on the Apgar?") {
        return "Actually, no baby receives a score of 10. The measurement technically goes up to 10, but doctors don't give a 10 as a matter of superstition, says Dr. Hill. About one minute after birth and then again five minutes later, a doctor, midwife, or nurse will assess your baby's breathing, heart rate, muscle tone, reflexes, and skin color—and each category is scored a 0, 1, or 2 depending on the observed condition. A total score of 7, 8, or 9 is normal, and if an infant scores below a 7, extra medical attention is given. Parents should also know that a low Apgar score is in no way an indication of future health.";
    }else if (input == "Can I Get Food Delivered to My Hospital?") {
        return "Yes! Eventually you'll realize you're starving because, well, those clear liquids you were living on to get the baby out don't cut it. C-section patients have to wait several hours to eat, but a mom who has an uncomplicated vaginal delivery can eat immediately, says Kim Rodgers, a labor and delivery nurse in Philadelphia. Your hospital may have a menu folder for moms so you can order from local restaurants, or you can always get delivery from a food app.";
    }
    else if (input == "Why Do I Put the Baby to My Breast When No Milk is Coming Out?") {
        return "Because doing so cues your body to start making milk. Plus, the antibody-rich colostrum that you produce first is what babies are meant to get for the first three days, says Meredith Fein Lichtenberg, a board-certified lactation consultant in New York City. And remember: Your newborn's stomach capacity is approximately 1 teaspoon at birth. If you're feeling overwhelmed by the try to breastfeed directive, lay your baby, wearing only a diaper, on your bare chest. This is great for regulating their temperature, it feels lovely for both of you, and it often results in spontaneous latching, says Lichtenberg. And if you need help, be sure to ask for it. Say, I would like some assistance with breastfeeding. Who's the best person here to help me with that?";
    }else if (input == "Should I Take Pain Meds?") {
        return "You don't have to, but there are certainly safe options if you need to, says Stuart Lustberg, M.D., an ob-gyn in Huntington, New York, who's been delivering babies for more than 30 years. There is a big push by government agencies, hospitals, and physicians to decrease the use of prescription pain meds due to the risk of developing a dependency or addiction. His rule of thumb: If you've had a vaginal delivery, try to stick with OTC pain relief to soothe cramping. You'll heal the same without prescription meds, and you'll avoid their side effect of severe constipation, says Dr. Lustberg. But if you've had a C-section, the constipation is likely going to be worth the much-needed relief. Even if you're not planning to have a C-section, it's a good idea to talk to your doctor now, just in case, about how they approach pain relief after surgery.";
    }
    else if (input == " How Much Bleeding is Too Much?") {
        return "Be prepared to soak through several industrial-size pads the first day after delivery, whether you delivered vaginally or by C-section. The morning after giving birth, most patients will pass a blood clot that can be as large as a tangerine, says Dr. Lustberg. This. Will. Freak. You. Out. But it gets better with each day. If you're breastfeeding, you can expect a gush of blood each time your baby latches on. However, nursing lessens your overall bleeding because it helps the uterus contract faster.";
    }else if (input == "How Much Does My Baby Weigh?") {
        return "It used to be that babies were weighed and foot-printed immediately after delivery, but that's no longer the case in many hospitals. Now we encourage skin-to-skin bonding as soon as the umbilical cord is cut, says Rodgers. We try to allow a full hour for that plus breastfeeding, then we'll do the measurements.!";
    }
    else if (input == "Is It Too Soon to Have a Glass of Champagne?") {
        return "You definitely deserve a celebratory toast. Get through your recovery period—two hours for vaginal, around 12 hours for a C-section—and then one drink is fine, says Dr. Lustberg. As for whether your baby will get some bubbly from your breast? There is so little volume of colostrum that even if alcohol does get in, it's a tiny amount, says Lichtenberg.";
    }else if (input == "Can I Get Up and Walk Around?") {
        return "The answer depends on a few factors. After an epidural, you have to wait until the numbness wears off—usually about an hour or two, and then you'll still need a hand. For women who have a C-section, be prepared not to be moving much until 12 to 18 hours after delivery. Remember, you just had surgery! Even if you have a vaginal delivery with no epidural, your nurse will still want to give you a hand when you walk to the bathroom. The reason for the kid gloves: After you give birth, changes in your cardiovascular system greatly affect blood volume and pressure, so it's easy for you to become dizzy, says Dr. Lustberg. You could fall and hurt yourself. It's the policy of most hospitals that even moms who have a vaginal delivery without an epidural are wheeled to the maternity wing. Just take the ride; you certainly earned it";
    }
    else if (input == "What Happens if I Touch My Baby's Head?") {
        return "Ah, the scary soft spot. Now that you're a grown-up, here's the deal: Normal touching with gentle fingertips is totally fine! says Lichtenberg. This be careful concern is directed more toward toddlers and other little buggers who may be around your baby—and captivated. We probably remember being told about this precaution when we were kids, so it's become ingrained in us, but now you can let it go, Lichtenberg says. Even more good news: The soft spot, which medically speaking is a space between the bones of the skull that gives your baby's head room to grow, completely closes up by around 12 months.";
    }else if (input == "Will It Hurt When I First Go to the Bathroom?") {
        return "Urination can burn a little because of the trauma to the urethral opening, but the pain is nothing like, well, delivering a baby. There may also be some stinging if you had a catheter (all patients with an epidural got one) or an episiotomy. If that's the case, and your provider offers you topical sprays and ointments to numb the area, use them, says Dr. Lustberg. You'll also get a spray bottle to spritz water on the area so you don't have to wipe, since toilet paper may feel like the enemy. As for bowel movements, if you had a vaginal delivery, you should be fine, but do use the numbing cream if you had a bad tear. A C-section patient can expect some trouble with that first stool, particularly if the pain meds cause constipation. You can also get stool softeners to help you go.";
    }else if (input == "Is My Baby's Snorting, Choking Sound Normal?") {
        return "In a word, yes. Your baby is going from living in amniotic fluid in your womb to breathing air, so there is a lot of fluid and mucus that needs to come out, says Dr. Hill. A newborn will be pretty spitty and gaggy for about the first 24 hours of life—sometimes longer, especially if you had a C-section, because the baby didn't get wrung out coming through the birth canal. Ask your doc about it if you're worried.";
    }else if (input == "What's That Plastic Tub in the Bathroom For?") {
        return "What's That Plastic Tub in the Bathroom For?";
    }
     else {
        return "Try asking something else!";
    }
}